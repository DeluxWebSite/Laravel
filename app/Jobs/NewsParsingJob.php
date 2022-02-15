<?php

namespace App\Jobs;

use App\Services\NewsParser;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Orchestra\Parser\Xml\Facade as XmlParser;

class NewsParsingJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $source;

    public function __construct($source)
    {
        dump($source);
        $this->source = $source;
    }

    public function handle(NewsParser $parser)
    {
        // echo "test";
        $data = $parser->run($this->source);
        dump($data);
    }
}