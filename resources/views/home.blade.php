@php
    if (DB::connection()->getPdo()) {
       echo "Successfully connected to my database ok=".DB::connection()->getDatabaseName();
    }
@endphp