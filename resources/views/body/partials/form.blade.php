<form class="form" method="POST" action="{{route('index.booking')}}">
{{ csrf_field()}}
    <div class="uk-margin">
        <div class="uk-form-controls">
            <div class="uk-inline">
                <label class="uk-form-label">Email</label>
                <span class="uk-form-icon" data-uk-icon="icon: mail"></span>
                <input class="uk-input booking-email uk-border-rounded" name="email" type="email" placeholder="your e-mail">
            </div>
        </div>
    </div>
    <div class="uk-margin">
        <div class="uk-form-controls">
            <div class="uk-inline">
                <label class="uk-form-label">Arrival</label>
                <span class="uk-form-icon" data-uk-icon="icon: calendar"></span>
                <input class="uk-input uk-border-rounded" name="arrival" min="{{ date('Y-m-d') }}" type="date" placeholder="m/dd/yyyy">
            </div>
        </div>
    </div>
    <div class="uk-margin">
        <div class="uk-form-controls">
            <div class="uk-inline">
                <label class="uk-form-label">Departure</label>
                <span class="uk-form-icon" data-uk-icon="icon: calendar"></span>
                <input class="uk-input uk-border-rounded" name="departure" min="{{ date('Y-m-d', strtotime('+1day')) }}" type="date" placeholder="m/dd/yyyy">
            </div>
        </div>
    </div>
    <div class="uk-margin">
        <div class="uk-form-controls uk-position-relative">
            <label class="uk-form-label" for="form-guest-select">Guest</label>
            <span class="uk-form-icon select-icon" data-uk-icon="icon: users"></span>
            <select name="guest" class="uk-select uk-border-rounded" id="form-guest-select">
                <option value="">Please select...</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
        </div>
    </div>
    <div class="uk-margin">
        <div class="uk-form-controls uk-position-relative">
            <label class="uk-form-label" for="form-rooms-select">Rooms</label>
            <span class="uk-form-icon select-icon" data-uk-icon="icon: album"></span>
            <select name="rooms" class="uk-select uk-border-rounded" id="form-rooms-select">
                <option value="">Please select...</option>
                <option value="Single">Single</option>
                <option value="Double">Double</option>
                <option value="Premier">Premier</option>
                <option value="Deluxe">Deluxe</option>
            </select>
        </div>
    </div>
    <div>
        <label class="uk-form-label empty-label">&nbsp;</label>
        <button class="uk-button uk-width-1-1" id="button" type="submit">Book Now!</button>
    </div>
</form>
