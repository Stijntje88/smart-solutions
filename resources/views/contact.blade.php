@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <section class="contact-section">
        <h1>Contact</h1>
        <p>Heb je vragen of wil je met ons in contact komen? Vul het onderstaande formulier in of stuur ons een e-mail op
           <a href="mailto:info@smart-solutions.nl">info@smart-solutions.nl</a>. We proberen zo snel mogelijk te reageren!</p>

        <form action="#" method="post" class="contact-form">
            <div class="form-group">
                <label for="name">Naam</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="subject">Onderwerp</label>
                <input type="text" id="subject" name="subject" required>
            </div>

            <div class="form-group">
                <label for="message">Tekst</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>

            <button type="submit">Verzenden</button>
        </form>
    </section>
@endsection
