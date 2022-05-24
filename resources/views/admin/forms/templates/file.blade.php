<div class="custom-file">
    <?php $input->addClass('custom-file-input'); ?>
    {!! $input !!}
    <label class="custom-file-label" for="{{$input->{MODEL_PRIMARY_KEY} }}">{{$input->val()?$input->val():($input->choose_label??'Chưa có file nào được chọn')}}</label>
</div>