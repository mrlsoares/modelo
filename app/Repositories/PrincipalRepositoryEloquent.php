<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\PrincipalRepository;
use App\Entities\Principal;

/**
 * Class PrincipalRepositoryEloquent
 * @package namespace App\Repositories;
 */
class PrincipalRepositoryEloquent extends BaseRepository implements PrincipalRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Principal::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
