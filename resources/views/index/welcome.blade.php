@extends('layouts.main')

@section('title', 'Build a form')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col" id="weather">
                <div class="alert alert-info" role="alert">
                    Please Select a city, from the drop down and the weather will show up here!
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="city">Select City</label>
                    <select class="form-control" id="city" name="city">
                        <option>Choose a city</option>
                        <option value="London">London</option>
                        <option value="Lisbon">Lisbon</option>
                        <option value="Bangkok">Bangkok</option>
                        <option value="Mumbai">Mumbai</option>
                    </select>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">

        $(document).ready(function (e) {

            $('#city').click(function (e) {

                $.ajax({
                    dataType: "html",
                    url: "{{\Illuminate\Support\Facades\URL::to('/recent-weather')}}?city="+$(this).find("option:selected").val(),
                    success: function(data) {
                        $('#weather').html(data);
                    }
                });


            });

        });


    </script>

@endsection
