<?php
namespace App\Services;
use App\Repositories\ConfigRepository;
use App\Validators\ConfigValidator;
use Illuminate\Contracts\Validation\ValidationException;
use Prettus\Validator\Exceptions\ValidatorException;

/**
 * Created by PhpStorm.
 * User: mrlsoares
 * Date: 21/11/15
 * Time: 12:23
 */
class ConfigService
{
    /**
     * @var ConfigRepository
     */
    protected $repository;
    /**
     * @var ConfigValidator
     */
    private $validator;


    /**
     * @param ConfigRepository $repository
     * @param ConfigValidator $validator
     */
    public function __construct(ConfigRepository $repository, ConfigValidator $validator)
    {
        $this->repository=$repository;
        $this->validator = $validator;

    }
    public function create(array $data)
    {
        try
        {
            $this->validator->with($data)->passesOrFail();
            return $this->repository->create($data);
        }
        catch(ValidationException $e)
        {
            return [
                'error'=>true,
                'message'=>$e->getMessageBag()
            ];
        }

    }
    public function update(array $data,$id)
    {

        try
        {
            $this->validator->with($data)->passesOrFail();
            return $this->repository->update($data,$id);
        }
        catch(ValidatorException $e)
        {
            return [
                'error'=>true,
                'message'=>$e->getMessageBag()
            ];
        }


    }
}