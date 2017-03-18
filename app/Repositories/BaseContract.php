<?php
/**
 * ETM SOFTWARE PLC
 * Created For UNHCR JOB with LARAVEL FRAMEWORK
 * Author: Miki Maine Amdu @MIKI_MAINE_AMDU
 * Date: 3/3/17
 * Time: 3:43 AM
 */
namespace App\Repositories;
use Illuminate\Database\Eloquent\Model;

/**
 * Interface BaseContract
 * @package App\Repositories
 */
interface BaseContract
{

    /**
     * @param  $id
     *
     * @return mixed
     *
     * @internal param bool $withRoles
     */
    public function findOrThrowException($id);

    /**
     * @param  $per_page
     * @param string $order_by
     * @param string $sort
     *
     * @return mixed
     *
     * @internal param $status
     */
    public function Paginated($per_page, $order_by = 'id', $sort = 'asc');

    /**
     * @param string $order_by
     * @param string $sort
     *
     * @return mixed
     */
    public function getAll($order_by = 'id', $sort = 'asc');

    /**
     * @param  $input
     *
     * @return mixed
     */
    public function create(array $input);

    /**
     * @param  $id
     * @param  $input
     *
     * @return mixed
     *
     * @internal param $roles
     */
    public function update(Model $id,array $input);

    /**
     * @param  $id
     *
     * @return mixed
     */
    public function destroy($id);

    /**
     * @param  $id
     *
     * @return mixed
     */
    public function delete(Model $id);


    /**
     * @param $id
     * @return mixed
     */
    public function restore(Model $id);
}
