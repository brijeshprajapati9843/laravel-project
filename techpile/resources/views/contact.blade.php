@extends('layout/master')

@Section('content')
<div class="row justify-content-evenly">
    <div class="col-sm-4">
        <h3 class="my-4">Contact <span class="text-info">Us</span></h3>
        <form action="{{url('handle/contact')}}" method="post">
            @csrf
            <label for="" class="fw-bold">Name :</label>
            <input type="text" name="name" placeholder="Enter Your Name" class="form-control mb-2" required>
            <label for="" class="fw-bold">Email :</label>
            <input type="text" name="email" placeholder="Enter Your Email" class="form-control mb-2" required>
            <label for="" class="fw-bold">Contact no :</label>
            <input type="text" name="contact" placeholder="Enter Your Contact No" class="form-control mb-3" required>
            <label for="" class="fw-bold">Message :</label>
            <textarea name="desc"rows="5" placeholder="Type Your Massege" class="form-control mb-4" required></textarea>
            <input type="submit" value="SEND" class="btn btn-outline-info px-5 fw-bold mb-5">
        </form>
    </div>
    <div class="col-sm-5 my-5">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14222.981818836337!2d83.10506027301568!3d26.97495905289473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1646129654576!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>
@endSection('content')