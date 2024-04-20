<form action="<?= base_url('user/update/' . $user['id']) ?>" method="post">
    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" id="username" name="username" value="<?= $user['username'] ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label for="full_name" class="form-label">Full Name</label>
        <input type="text" id="full_name" name="full_name" value="<?= $user['full_name'] ?>" class="form-control">
    </div>

    

    <div class="mb-3">
        <label for="address" class="form-label">Address</label>
        <input type="text" id="address" name="address" value="<?= $user['address'] ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label for="contact_number" class="form-label">Contact Number</label>
        <input type="text" id="contact_number" name="contact_number" value="<?= $user['contact_number'] ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label for="date_of_birth" class="form-label">Date of Birth</label>
        <input type="date" id="date_of_birth" name="date_of_birth" value="<?= $user['date_of_birth'] ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label for="gender" class="form-label">Gender</label>
        <select id="gender" name="gender" class="form-select">
            <option value="male" <?= ($user['gender'] == 'male') ? 'selected' : '' ?>>Male</option>
            <option value="female" <?= ($user['gender'] == 'female') ? 'selected' : '' ?>>Female</option>
            <option value="other" <?= ($user['gender'] == 'other') ? 'selected' : '' ?>>Other</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="occupation" class="form-label">Occupation</label>
        <input type="text" id="occupation" name="occupation" value="<?= $user['occupation'] ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label for="membership_type" class="form-label">Membership Type</label>
        <select id="membership_type" name="membership_type" class="form-select">
            <option value="Distributer" <?= ($user['membership_type'] == 'Distributer') ? 'selected' : '' ?>>Distributer</option>
            <option value="Senior Citizen" <?= ($user['membership_type'] == 'Senior Citizen') ? 'selected' : '' ?>>Senior Citizen</option>
            <option value="Officer" <?= ($user['membership_type'] == 'Officer') ? 'selected' : '' ?>>Officer</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="date_joined" class="form-label">Date Joined</label>
        <input type="date" id="date_joined" name="date_joined" value="<?= $user['date_joined'] ?>" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>
