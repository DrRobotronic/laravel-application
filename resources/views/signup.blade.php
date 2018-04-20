@extends ('layouts.master')

@section ('content')

<h1>{{ $title }}</h1>

<form action="">
    <div class="row">
        <div class="col-sm">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
        </div>
        <div class="col-sm">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm">
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
        </div>
        <div class="col-sm">
            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm">
            <legend>Select Gender:</legend>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                <label class="form-check-label" for="male">Male</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                <label class="form-check-label" for="female">Female</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="other" value="other">
                <label class="form-check-label" for="other">Rather not say</label>
            </div>
        </div>
        <div class="col-sm">
            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" class="form-control" id="number" name="number" min="0">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm">
            <div class="form-group">
                <label for="bio">Bio:</label>
                <textarea class="form-control" name="bio" id="bio" cols="10" rows="2"></textarea>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm">
            <div class="form-group">
                <label for="url">Website:</label>
                <input type="url" class="form-control" id="url" name="url">
            </div>
        </div>
        <div class="col-sm">
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" class="form-control" id="phone" name="phone">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm">
            <div class="form-group">
                <label for="referral">How did you hear about this site?</label>
                <select name="referral" id="referral" class="form-control">
                    <option value="newspaper">Newspaper</option>
                    <option value="television">Television</option>
                    <option value="radio">Radio</option>
                </select>
            </div>
        </div>
    </div>
</form>

@endsection