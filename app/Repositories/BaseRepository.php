<?php
/**
 * ETM SOFTWARE PLC
 * Created For UNHCR JOB with LARAVEL FRAMEWORK
 * Author: Miki Maine Amdu @MIKI_MAINE_AMDU
 * Date: 3/3/17
 * Time: 3:43 AM
 */
namespace App\Repositories;

use App\Exceptions\GeneralException;
use Exception;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BaseRepository.
 */
class BaseRepository implements BaseContract
{
    /**
     * @var
     */
    protected $modelName;

    /**
     * @param  $per_page
     * @param string $order_by
     * @param string $sort
     *
     * @return mixed
     *
     * @internal param $status
     */
    public function getPaginated($per_page, $order_by = 'id', $sort = 'asc')
    {
        $instance = $this->getNewInstance();

        return $instance->orderBy($order_by, $sort)->paginate($per_page);
    }

    /**
     * Returns the instance of the Model.
     *
     * @return mixed
     */
    protected function getNewInstance()
    {
        $model = $this->modelName;

        return new $model();
    }

    /**
     * @return mixed
     */
    public function getCount()
    {
        return $this->query()->count();
    }

    /**
     * @return mixed
     */
    protected function query()
    {
        return call_user_func(static::MODEL.'::query');
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function find($id)
    {
        return $this->query()->find($id);
    }

    /**
     * @param  $per_page
     * @param string $order_by
     * @param string $sort
     *
     * @return mixed
     *
     * @internal param $status
     */
    public function Paginated($per_page, $order_by = 'id', $sort = 'asc')
    {
        // TODO: Implement Paginated() method.
    }

    /**
     * @param string $order_by
     * @param string $sort
     *
     * @return mixed
     */
    public function getAll($order_by = 'id', $sort = 'asc')
    {
        $instance = $this->getNewInstance();

        return $instance->orderBy($order_by, $sort)->get();
    }

    /**
     * @param $input
     *
     * @throws GeneralException
     *
     * @return mixed
     *
     * @internal param $roles
     */
    public function create(array $input)
    {
        try {
            $result =  $this->createStub($input);
            if ( $result->save()) {
                return $result;
            }
        } catch (Exception $e) {
            //Do things with the Error
        }
        throw new GeneralException('There was a problem creating this '.$this->getModelNameFromNamespace().' Please try again!'.$e->getMessage());
    }

    /**
     * @return mixed
     */
    protected function getModelNameFromNamespace()
    {

        return  array_last(explode('.',str_replace('\\', '.', get_class($this->getNewInstance()))));
    }

    /**
     * @param Model $model
     * @param array $input
     * @return mixed
     * @throws GeneralException
     * @internal param $roles
     */
    public function update(Model $model, array $input)
    {

        if ($model->update($input)) {
            return true;
        }
        throw new GeneralException('There was a problem updating this'.$this->getModelNameFromNamespace().'. Please try again.');
    }

    /**
     * @param $id
     *
     * @throws GeneralException
     *
     * @return mixed
     *
     * @internal param bool $withRoles
     */
    public function findOrThrowException($id)
    {
        $instance = $this->getNewInstance();
        $collection = $instance->find($id);
        if (!is_null($collection)) {
            return $collection;
        }
        throw new GeneralException('That '.$this->getModelNameFromNamespace().' does not exist.');
    }

    /**
     * @param $id
     *
     * @throws GeneralException
     *
     * @return mixed
     */
    public function destroy($id)
    {
            $result = $this->findOrThrowException($id);
        if ($result->delete()) {
            return $result;
        }

        throw new GeneralException('There was a problem deleting this '.$this->getModelNameFromNamespace().'. Please try again.');
    }

    /**
     * @param $id
     * @return mixed
     * @throws GeneralException
     */
    public function delete(Model $id)
    {
        $result = $model = $this->getNewInstance()->withTrashed()->find($id);
        if ($result->forceDelete()) {
            return $model;
        }

        throw new GeneralException('There was a problem deleting permanently this '.$this->getModelNameFromNamespace().'. Please try again.');
    }

    public function restore(Model $id)
    {
        if ($this->getNewInstance()->withTrashed()->find($id->id)->restore()) {
            return true;
        }

        throw new GeneralException('There was a problem restoring this '.$this->getModelNameFromNamespace().'. Please try again.');

    }




}
