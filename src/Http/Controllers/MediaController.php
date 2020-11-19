<?php


namespace LaravelRotEbal\GovNova\Http\Controllers;

use DateTime;
use Illuminate\Routing\Controller;
use Illuminate\Support\Arr;
use Laravel\Nova\Http\Requests\NovaRequest;
use LaravelRotEbal\GovNova\GovNova;


class MediaController extends Controller {



    /**
     * Serve the requested stylesheet.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return \Illuminate\Http\Response
     *
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     */
    public function show(NovaRequest $request) {
        $dir = Arr::get(GovNova::allMedia(), $request->dir);

        abort_if(is_null($dir), 404);

        $path = $dir . $request->media;

        return response(
            file_get_contents($path),
            200,
            [
                'Content-Type' => mime_content_type($path),
            ]
        )->setLastModified(DateTime::createFromFormat('U', filemtime($path)));
    }



}
