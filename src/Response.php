<?php

declare(strict_types=1);

namespace Tdx\Http;

use Tdx\Http\Contract\ResponseInterface;

use Hyperf\HttpServer\Response as HyResponse;

class Response extends HyResponse implements ResponseInterface
{

}
