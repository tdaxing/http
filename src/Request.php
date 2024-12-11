<?php

declare(strict_types=1);

namespace Sztdx\Http;

use Hyperf\HttpServer\Request as HyRequest;
use Sztdx\Http\Contract\RequestInterface;

class Request extends HyRequest implements RequestInterface
{

}
