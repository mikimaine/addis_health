<?php
/**
 * Created by Miki Maine Amdu.
 * For : Worldcrunch
 * User: MIKI$
 * Date: 15/12/2016
 * Time: 4:46 PM.
 */
namespace App\Http\Controllers;

use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Support\Facades\Response;

/**
 * Class ApiController.
 */
class ApiController extends Controller
{
    /**
     * @var int
     */
    protected $statusCode = 200;

    /**
     * @var null
     */
    protected $errorCode = null;

    /**
     * @return mixed
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @param mixed $statusCode
     *
     * @return $this
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * @param mixed $errorCode
     *
     * @return $this
     */
    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;

        return $this;
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function respondNotFound($message = 'Not Found!')
    {
        return $this->setStatusCode(404)->setErrorCode(216)->respondWithError($message);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function respondInternalError($message = 'Internal error!')
    {
        return $this->setStatusCode(500)->setErrorCode(250)->respondWithError($message);
    }

    /**
     * @param $data
     * @param array $headers
     *
     * @return mixed
     */
    public function respond($data, $headers = [])
    {
        return Response::json($data, $this->getStatusCode(), $headers);
    }

    /**
     * @param Paginator $items
     * @param $data
     *
     * @return mixed
     */
    public function respondWithPagination(Paginator $items, $data)
    {
        $data = array_merge($data, [
            'paginate' => [
                'total_count'  => $items->total(),
                'total_page'   => ceil($items->total() / $items->perPage()),
                'current_page' => $items->currentPage(),
                'limit'        => $items->perPage(),
            ],

        ]);

        return $this->respond($data);
    }

    /**
     * @param $message
     *
     * @return mixed
     */
    public function respondWithError($message)
    {
        return $this->respond([
            'error' => [
                'message'     => $message,
                'status_code' => $this->getStatusCode(),
                'error_code'  => $this->getErrorCode(),
            ],
        ]);
    }
}
