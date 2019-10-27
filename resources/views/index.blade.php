<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="{{asset('css/app.css')}}" rel="stylesheet">
</head>

<body>
    <div class="container">

        <div class="row">
            <div class="col-12 py-3">

                <form action="{{route('store')}}" method="POST" class="form-inline">
                    @csrf
                    <div class="form-group mx-sm-3 mb-2">
                            <label class="my-1 mr-2">Name : </label>
                            <input type="text" class="form-control mb-2 mr-sm-2 @error('name') is-invalid @enderror" id="name" name="name" placeholder="Input Name">
                            <button type="submit" class="btn btn-primary mb-2">Create</button>
                            @error('name')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                </form>

            </div>
        </div>
        <div class="row">
            <div class="col-12">

                <table class="table py-3">
                    <thead>
                        <tr>
                            <th scope="col">No. ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Parity (Odd/Even)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- LOGIC START -->
                        @foreach ($data as $datas)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$datas['name']}}</td>
                            <td>
                                @if($datas['id'] % 2 == 0)
                                    <h6>Even</h6>
                                @endif
                                @if($datas['id'] % 2 == 1)
                                    <h6>Odd</h6>                                    
                                @endif
                            </td>
                        </tr>
                        @endforeach
                        <!-- LOGIC END -->
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</body>

</html>
