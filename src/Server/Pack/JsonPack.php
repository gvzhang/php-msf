<?php
/**
 * JsonPack
 *
 * @author camera360_server@camera360.com
 * @copyright Chengdu pinguo Technology Co.,Ltd.
 */

namespace PG\MSF\Server\Pack;

use PG\MSF\Server\CoreBase\SwooleException;

class JsonPack implements IPack
{
    public function pack($data)
    {
        return json_encode($data, JSON_UNESCAPED_UNICODE);
    }

    public function unPack($data)
    {
        $value = json_decode($data);
        if (empty($value)) {
            throw new SwooleException('json unPack 失败');
        }
        return $value;
    }
}