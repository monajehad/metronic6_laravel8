<?php
namespace App\Traits;

use Illuminate\Support\Facades\Schema;

trait MetronicPaginate
{

    public static function getColumns()
    {
        $table = with(new static)->getTable();
        $columns = Schema::getColumnListing($table);
        return $columns;
    }

    public static function scopeMetronicPaginate($modelQuery)
    {
        $pagination = request()->pagination;
        $query = request()->input('query');
        $sort = request()->sort;
        request()->request->add(['page' => $pagination['page']]);
        $model = $modelQuery;
        $columns = static::getColumns();
        if ($query)
            foreach ($query as $key => $value) {
                if (in_array($key, $columns) && $key != 'banned_at') {
                    $model->where($key, $value);
                } else {
                    //for admins role only
                    if ($key == 'role') {
                        $model->whereHas('roles', function ($query) use ($value) {
                            $query->where('name', $value);
                        });
                    }
                    //for user has shop where category
                    if ($key == 'shop_category_id') {
                        $model->whereHas('shop', function ($query) use ($value) {
                            $query->where('category_id', $value);
                        });
                    }
                }

                if (($key == 'generalSearch')) {

                    $model->where(function ($q) use ($columns, $value) {
                        foreach ($columns as $column) {
                            if (!in_array($column, ['created_at', 'updated_at', 'deleted_at', 'email_verified_at', 'banned_at',
                                'dob']))
                            $q->orWhere($column, 'like', '%' . $value . '%');

                        }
                    });
                }
            }
        if ($sort && in_array($sort['field'], $columns)) {
            if ($sort['field'] != 'id'){
                $model->orderBy($sort['field'], $sort['sort']);
            }
        }

        $pagination['rowIds'] = $modelQuery->pluck('id'); // add this for multi select
        $model = $model->paginate($pagination['perpage']);

        $pagination['total'] = $model->total();
        $pagination['pages'] = $model->lastPage();
        $pagination['sort'] =  $sort['sort'] ?? '';
        $pagination['field'] = $sort['field'] ?? '';
        $pagination['iTotalRecords'] = $model->total();
        $pagination['iTotalDisplayRecords'] = $model->total();
        $pagination['sEcho'] = 0;
        $response = [
            'meta' => $pagination,
            'data' => $model->toArray()['data']
        ];
        return $response;
    }

    public static function scopeAdvancedMetronicPaginate($modelQuery)
    {
        $pagination = request()->pagination;
        $query = request()->input('query');
        $sort = request()->sort;
        request()->request->add(['page' => $pagination['page']]);
        $model = $modelQuery;
        $columns = static::getColumns();
        if ($query)
            foreach ($query as $key => $value) {
                if (in_array($key, $columns) && $key != 'banned_at') {
                    $model->where($key, $value);
                } else {
                    //for admins role only
                    if ($key == 'role') {
                        $model->whereHas('roles', function ($query) use ($value) {
                            $query->where('name', $value);
                        });
                    }
                }
            }
        if ($sort && in_array($sort['field'], $columns)) {
            if ($sort['field'] != 'id'){
                $model->orderBy($sort['field'], $sort['sort']);
            }
        }
        $pagination['rowIds'] = $modelQuery->pluck('id'); // add this for multi select
        $model = $model->paginate($pagination['perpage']);

        $pagination['total'] = $model->total();
        $pagination['pages'] = $model->lastPage();
        $pagination['sort'] = $sort['sort'] ?? '';
        $pagination['field'] = $sort['field'] ?? '';
        $pagination['iTotalRecords'] = $model->total();
        $pagination['iTotalDisplayRecords'] = $model->total();
        $pagination['sEcho'] = 0;
        $pagination['perpage'] = 10;

        $response = [
            'meta' => $pagination,
            'data' => $model->toArray()['data']
        ];
        return $response;
    }




}
