


                @if ($input->type == 'file')
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="{{$input->{MODEL_PRIMARY_KEY} }}" name="{{$input->name}}">
                        <label class="custom-file-label selected" for="{{$input->{MODEL_PRIMARY_KEY} }}">{{$input->val()?$input->val():'Chưa có file nào dc chọn'}}</label>
                    </div>

                @else
                    {!! $input !!}    
                @endif