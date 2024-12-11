<?php

declare(strict_types=1);

namespace Tdx\Http;

use Hyperf\HttpServer\Request as HyRequest;
use Tdx\Http\Contract\RequestInterface;

class Request extends HyRequest implements RequestInterface
{

}
