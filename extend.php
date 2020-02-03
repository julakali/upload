<?php

namespace FoF\Upload;

use FoF\FilesystemDrivers\Extend\ConfigureFilesystem;

return [
    (new ConfigureFilesystem('fof-upload.public-driver'))
        ->title('fof-upload.admin.filesystem-driver.public.title')
        ->description('fof-upload.admin.filesystem-driver.public.description')
        ->public(),
    (new ConfigureFilesystem('fof-upload.private-driver'))
        ->title('fof-upload.admin.filesystem-driver.private.title')
        ->description('fof-upload.admin.filesystem-driver.private.description'),
];
