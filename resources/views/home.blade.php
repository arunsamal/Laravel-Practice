@php
    if (DB::connection()->getPdo()) {
       echo "Successfully connected to my database Hi=".DB::connection()->getDatabaseName();
    }
@endphp