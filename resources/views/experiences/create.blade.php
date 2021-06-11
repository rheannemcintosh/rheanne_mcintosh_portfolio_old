<form action="{{ route('experiences.store') }}" method="post">@csrf
    <div>
        <label for="employer_name">Employer</label>
        <input name="employer_name"type="text">
    </div>
    <div>
        <label for="role">Role</label>
        <input name="role" type="text">
    </div>
    <div>
        <label for="employment_type">Type</label>
        <select name="employment_type">
            <option value="Full Time">Full Time</option>
            <option value="Part Time">Part Time</option>
        </select>
    </div>
    <div>
        <label for="start_date">Start Date</label>
        <input for="start_date" type="date">
    </div>
    <div>
        <label for="end_date">End Date</label>
        <input for="end_date" type="date">
    </div>
    <div>
        <label for="location">Location</label>
        <input name="location" type="text">
    </div>
    <div>
        <label for="country">Country</label>
        <select name="country">
            <option value="United Kingdom">United Kingdom</option>
        </select>
    </div>
    <div>
        <button>Submit</button>
    </div>
</form>
