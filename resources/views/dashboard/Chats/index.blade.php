@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Chats</h1>
</div>

<body>
    <section>
        <div class="container ">
            <form action="Chats/send" method="post">
                {{ csrf_field() }}
                <div class="row justify-content-center">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="name" class="form-control" name="name" placeholder="Name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" name="message" rows="3"></textarea>
                        </div>
                        <div class="d-flex align-items-center flex-column">
                            <button type="submit" class="btn btn-block btn-success ">Send Email</button>
                        </div>
            </form>
        </div>
        </div>
        </div>
    </section>
</body>
@endsection