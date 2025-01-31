@php
    if (DB::connection()->getPdo()) {
       echo "Successfully connected=".DB::connection()->getDatabaseName();
    }
@endphp