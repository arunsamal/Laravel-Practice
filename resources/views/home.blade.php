@php
    if (DB::connection()->getPdo()) {
       echo "Successfully connected to my database=".DB::connection()->getDatabaseName();
    }
@endphp