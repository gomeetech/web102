$(function(){
    const MenuForm = function(options) {
        this.urls = {};
        this.id = 0;
        this.template = "";
        this.actionTemplate = "";
        this.init_list = ["urls", "template"];
        this.options = options;
        var self = this;
        this.init = args => {
            App.setDefault(this, args || this.options);
            this.onStart();
        };
        this.checkType = function(type){
            this.toggleBy('type', type == 'post');
        };

        this.toggleBy = function (ref, status) {
            var refNode = $('.toggle-by-'+ref);
            if(refNode.length){
                if(status){
                    refNode.removeClass("hide-by-"+ref);
                }else if(!refNode.hasClass("hide-by-"+ref)){
                    refNode.addClass("hide-by-"+ref);
                }
            }

            var rNode = $('.rtoggle-by-'+ref);
            if(rNode.length){
                if(!status){
                    rNode.removeClass("hide-by-"+ref);
                }else if(!rNode.hasClass("hide-by-"+ref)){
                    rNode.addClass("hide-by-"+ref);
                }
            }
        };

        this.onStart = function() {
            this.checkType($('.crazy-form input#type').val());
            this.enableSort();

            $(document).on('click', '.item-actions .btn-delete-menu', function(){
                self.delete($(this).data('id'));
            });

        };
        this.enableSort = function(){
            App.func.call("App.nestable.add", ['#crazy-menu-list']);
        };
        this.disableSort = function(){
            App.func.call("App.nestable.remove", ['#crazy-menu-list']);
        };

        this.sortCallback = function(l, e){
            var self = this;
            let raw = $(l).nestable('toArray');
            let data = {};
            raw.map(function (item, i) {
                data[item.id] = i+1;
            });

            ajaxRequest(self.urls.sort, "POST", {data:data}, function(rs){
                if(rs.status){
                    console.log(rs.message);
                }
                else{
                    App.Swal.error(rs.message);
                }
            }, function(err){
                App.Swal.error("L???i kh??ng x??c ?????nh");
            });
        };
        this.delete = function(id){
            App.Swal.confirm("b???n c?? ch???c ch???n mu???n x??a menu n??y?", function(){

                    showLoading();
                    ajaxRequest(self.urls.delete, "POST", {ids:[id]}, function(rs){
                        hideLoading();
                        if(rs.status){
                            $('#crazy-menu-list').nestable('remove', id);
                        }else{
                            App.Swal.error(rs.message);
                        }
                    }, function(err){
                        //
                        hideLoading();
                        App.Swal.error("L???i kh??ng x??c ?????nh!");
                    });

            });
        };

    };



    let options = {};
    if(typeof menu_form_data == 'object'){
        options = menu_form_data;
    }

    let menu_form = new MenuForm(options);
    menu_form.init();
    if(typeof App.menu != "object"){
        App.menu = {};
    }
    App.menu.form = menu_form;

});
