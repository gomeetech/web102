<?php

namespace App\Repositories\Categories;

use Gomee\Repositories\BaseRepository;

/**
 * danh sách method
 * @method $this select(...$columns) thêm các cột cần select
 * @method $this selectRaw($string) select dạng nguyen bản
 * @method $this from($table) 
 * @method $this fromRaw($string)
 * @method $this join(string $table, string $tableColumn, string $operator = '=', string $leftTableColumn) join vs 1 bang khac
 * @method $this leftJoin($table, $tableColumn, $operator, $leftTableColumn)
 * @method $this crossJoin($_ = null)
 * @method $this where($_ = null)
 * @method $this whereRaw($_ = null)
 * @method $this whereIn($column, $values = [])
 * @method $this whereNotIn($column, $values = [])
 * @method $this whereBetween($column, $values = [])
 * @method $this whereNotBetween($column, $values = [])
 * @method $this whereDay($_ = null)
 * @method $this whereMonth($_ = null)
 * @method $this whereYear($_ = null)
 * @method $this whereDate($_ = null)
 * @method $this whereTime($_ = null)
 * @method $this whereColumn($_ = null)
 * @method $this orWhere($_ = null)
 * @method $this orWhereRaw($_ = null)
 * @method $this orWhereIn($column, $values = [])
 * @method $this orWhereNotIn($column, $values = [])
 * @method $this orWhereBetween($column, $values = [])
 * @method $this orWhereNotBetween($column, $values = [])
 * @method $this orWhereDay($_ = null)
 * @method $this orWhereMonth($_ = null)
 * @method $this orWhereYear($_ = null)
 * @method $this orWhereDate($_ = null)
 * @method $this orWhereTime($_ = null)
 * @method $this orWhereColumn($leftColumn, $operator = '=', $rightColumn)
 * @method $this groupBy($column)
 * @method $this having($_ = null)
 * @method $this havingRaw($_ = null)
 * @method $this orderBy($_ = null)
 * @method $this orderByRaw($_ = null)
 * @method $this skip($_ = null)
 * @method $this take($_ = null)
 * @method $this with($_ = null)
 * @method $this withCount($_ = null)
 * @method $this load($_ = null)
 */

class CategoryRefRepository extends BaseRepository
{
    /**
     * class chứ các phương thức để validate dử liệu
     * @var string $validatorClass 
     */
    protected $validatorClass = 'CategoryRefs\CategoryRefValidator';
    /**
     * @var string $resourceClass
     */
    protected $resourceClass = 'CategoryRefResource';
    /**
     * @var string $collectionClass
     */
    protected $collectionClass = 'CategoryRefCollection';

    /**
     * tên class mặt nạ. Thược có tiền tố [tên thư mục] + \ vá hậu tố Mask
     *
     * @var string
     */
    protected $maskClass = 'CategoryRefs\CategoryRefMask';

    /**
     * tên collection mặt nạ
     *
     * @var string
     */
    protected $maskCollectionClass = 'CategoryRefs\CategoryRefCollection';

    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\CategoryRef::class;
    }

}