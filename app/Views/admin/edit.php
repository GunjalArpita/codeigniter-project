<h2 style="text-align: center; color: #333;">Edit Admin</h2>

<form method="post" action="/admin/update/<?= $admin['adminid']; ?>" 
      style="width: 300px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 5px; background-color: #f9f9f9; box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);">

    <label for="adminemail" style="display: block; margin-bottom: 5px; font-weight: bold;">Email:</label>
    <input type="email" name="adminemail" id="adminemail" value="<?= $admin['adminemail']; ?>" required 
        style="width: 100%; padding: 8px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px;">

    <label for="adminpass" style="display: block; margin-bottom: 5px; font-weight: bold;">New Password:</label>
    <input type="password" name="adminpass" id="adminpass" placeholder="New Password (Leave blank to keep current)" 
        style="width: 100%; padding: 8px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px;">

    <button type="submit" 
        style="width: 100%; padding: 10px; background-color: #28a745; color: white; border: none; border-radius: 5px; cursor: pointer;">
        Update
    </button>
</form>
