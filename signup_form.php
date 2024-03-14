<h2>signup_form</h2>
<form action="signup.php" method="POST">
  <label for="first_name">First Name:</label>
  <input type="text" id="first_name" name="first_name" value="<?php echo $user['first_name']; ?>" placeholder="Your name..">><br><br>

  <label for="last_name">Last Name:</label>
  <input type="text" id="last_name" name="last_name" value="<?php echo $user['last_name']; ?>"><br><br>

  <label for="email">email:</label>
  <input type="text" id="email" name="email" value="<?php echo $user['email']; ?>"><br><br>

  <label for="date_of_birth">Date of Birth:</label>
  <input type="date" id="date_of_birth" name="date_of_birth" value="<?php echo $user['date_of_birth']; ?>"><br><br>

  <label for="password">password:</label>
  <input type="variable" id="password" name="password" value="<?php echo $user['password']; ?>"><br><br>

  <label for="confirmpassword"> confirm password:</label>
  <input type="variable" id="confirmpassword" name="confirmpassword" value="<?php echo $user['confirmpassword']; ?>"><br><br>

  <label for="gender">Gender:</label>
  <select name="gender" id="gender">
    <option value="man" <?php if (isset($user['gender']) && $user['gender'] === 'man') echo 'selected'; ?>>man</option>
    <option value="woman" <?php if (isset($user['gender']) && $user['gender'] === 'woman') echo 'selected'; ?>>woman</option>
    <option value="transgender man" <?php if (isset($user['gender']) && $user['gender'] === 'transgender man') echo 'selected'; ?>>transgender man</option>
    <option value="transgender woman" <?php if (isset($user['gender']) && $user['gender'] === 'transgender woman') echo 'selected'; ?>>transgender woman</option>
    <option value="Non-binary" <?php if (isset($user['gender']) && $user['gender'] === 'non-binary') echo 'selected'; ?>>Non-binary</option>
    <option value="Agender" <?php if (isset($user['gender']) && $user['gender'] === 'Agender') echo 'selected'; ?>>Agender</option>
    <option value="gender not listed" <?php if (isset($user['gender']) && $user['gender'] === 'gender not listed') echo 'selected'; ?>>gender not listed</option>
    <option value="prefer not to say" <?php if (isset($user['gender']) && $user['gender'] === 'prefer not to say') echo 'selected'; ?>>prefer not to say</option>
  </select>
  <button type="submit">create Profile</button>
</form>