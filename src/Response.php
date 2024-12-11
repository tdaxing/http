<?php

declare(strict_types=1);

namespace Sztdx\Http;

use Sztdx\Http\Contract\ResponseInterface;

use Hyperf\HttpServer\Response as HyResponse;

class Response extends HyResponse implements ResponseInterface
{

}
