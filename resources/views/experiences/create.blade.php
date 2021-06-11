<form action="{{ route('experiences.store') }}" method="post">@csrf
    <div>
        <label for="employer">Employer</label>
        <input name="employer"type="text">
    </div>
    <div>
        <label for="role">Role</label>
        <input name="role" type="text">
    </div>
    <div>
        <label for="type">Type</label>
        <select name="type">
            <option value="Full Time">Full Time</option>
            <option value="Part Time">Part Time</option>
        </select>
    </div>
    <div>
        <label for="end-date">Start Date</label>
        <input for="end-date" type="date">
    </div>
    <div>
        <label for="end-date">End Date</label>
        <input for="end-date" type="date">
    </div>
    <div>
        <label for="location">Location</label>
        <input name="location" type="text">
    </div>
    <div>
        <label for="country">Country</label>
        <select name="county">
            <option value="United Kingdom">United Kingdom</option>
        </select>
    </div>
    <div>
        <button>Submit</button>
    </div>
</form>
