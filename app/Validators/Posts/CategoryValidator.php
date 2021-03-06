<?php

namespace App\Validators\Posts;

use Gomee\Validators\Validator as BaseValidator;
class CategoryValidator extends BaseValidator
{
    public function extends()
    {
        

        $this->addRule('check_parent', function($prop, $value){
            if(!$value) return true;
            return $this->repository->count(['id' => $value]) ? true : false;
        });

        

        
    }
    /**
     * ham lay rang buoc du lieu
     */
    public function rules()
    {
    
        $rules = [
            'name'                             => 'required|string|max:191|unique_prop',
            'parent_id'                        => 'check_parent',
            'description'                      => 'mixed',
            'keywords'                         => 'mixed',
            'feature_image'                    => 'mimes:jpg,jpeg,png,gif',
        ];
        

        return $rules;
        // return $this->parseRules($rules);
    }

    public function messages()
    {
        return [
            'name.required'                    => 'Tên danh mục không được bỏ trống',
            'name.string'                      => 'Tên danh mục không hợp lệ',
            'name.max'                         => 'Tên danh mục hơi... dài!',
            'name.unique_prop'                 => 'Tên danh mục bị trùng lặp',
            'feature_image.mimes'              => 'Định đạng file không được hỗ trợ',
            'parent_id.check_parent'           => 'Danh mục cha không hợp lệ',
            
            
        ];
    }
}