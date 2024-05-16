<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Storage;
use App\Models\WebService;

class DeleteImage
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    use InteractsWithQueue;

    public function handle(object $event): void
    {
        $model = $event->getModel();
        if ($model->file_path) {
            // 画像を削除
            Storage::delete($model->file_path);
        }
    }
}
