<h2>You've got mail form {{ $data['firstname'] }}</h2>
<h3>Listing Feedback</h3>

Application For: {{ $data['product'] }}
Amount Required: {{ $data['loan_amount'] }}
First Name: {{ $data['firstname'] }} <br>
Last Name: {{ $data['lastname'] }} <br>
National ID: {{ $data['national_id'] }} <br>
Phone Number: {{ $data['phone_number'] }} <br>
Email Address: {{ $data['email'] }} <br>
Physical Address: {{ $data['address'] }} <br>
Employer: {{ $data['employer'] }} <br>
Employer Contact: {{ $data['employer_contact'] }} <br>
Designation: {{ $data['designation'] }} <br>
Income Amount: {{ $data['income_amount'] }} <br>
Additional Notes: {{ $data['notes'] }} <br>

<a href="mailto:{{ $data['email'] }}">Reply to this client</a>
