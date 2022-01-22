<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container pt-5" style="max-width: 500px">

        <!-- Alert User -->
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif

        <form action="" method="post" action="{{ route('contact.save') }}">
            @csrf

            <x-forms.input label="Name" type="text" name="name" id="name" class="alert alert-danger"/>

            <x-forms.input label="Email" type="text" name="email" id="email" class="alert alert-danger"/>

            <x-forms.input label="Phone" type="text" name="phone" id="phone" class="alert alert-danger"/>

            <x-forms.input label="Subject" type="text" name="subject" id="subject" class="alert alert-danger"/>

            <x-forms.textarea label="Message" name="message" id="message" rows="5" class="alert alert-danger"/>
<!-- 
            <div class="form-group">
                <label>Message</label>
                <textarea class="form-control" name="message" id="message" rows="5"></textarea>
 -->
                <!-- Show error -->
               <!--  @if ($errors->has('message'))
                    <div class="alert alert-danger">
                        {{ $errors->first('message') }}
                    </div>
                @endif                    
            </div> -->
            <x-forms.submit type="submit" name="send" value="Send" class="btn btn-dark btn-block"/>
            <!-- <input type="submit" name="send" value="Send" class="btn btn-dark btn-block"> -->
        </form>
    </div>
</body>

</html>