<main class="pt-5">
    <div class="container mt-5 mb-5">
        <div class="card-profile shadow-lg mx-auto" style="max-width: 900px;">
            <div class="card-body">
                <h5 class="card-title-profile">Profil Pengguna</h5>
                <form id="profileForm">
                    <div class="row">
                        <!-- Bagian Foto -->
                        <div class="col-md-4 text-center">
                            <div class="photo-container-profile mx-auto">
                                <img id="profilePhoto" src="leeknow.jpeg" alt="Profile Photo">
                            </div>
                            <input type="file" class="form-control profile-edit d-none" id="editPhotoProfile" accept="image/*">
                        </div>
                        <!-- Bagian Data -->
                        <div class="col-md-8">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama</label>
                                <p class="profile-view" id="viewName">Lee Minho</p>
                                <input type="text" class="form-control profile-edit d-none" id="editName" value="Lee Minho">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <p class="profile-view" id="viewEmail">leeknow@gmail.com</p>
                                <input type="email" class="form-control profile-edit d-none" id="editEmail" value="leeknow@gmail.com">
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Nomor Telepon</label>
                                <p class="profile-view" id="viewPhone">088888888888888</p>
                                <input type="tel" class="form-control profile-edit d-none" id="editPhone" value="088888888888888">
                            </div>
                            <div class="mb-3">
                                <label for="gender" class="form-label">Jenis Kelamin</label>
                                <p class="profile-view" id="viewGender">Laki-Laki</p>
                                <select class="form-control profile-edit d-none" id="editGender">
                                    <option value="Laki-Laki" selected>Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Alamat</label>
                                <p class="profile-view" id="viewAddress">Kulon Progo</p>
                                <textarea class="form-control profile-edit d-none" id="editAddress" rows="2">Kulon Progo</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="text-end">
                        <button type="button" id="editBtn" class="btn btn-outline-primary">Edit Profil</button>
                        <button type="submit" id="saveBtn" class="btn btn-warning d-none">Simpan Perubahan</button>
                        <button type="button" id="cancelBtn" class="btn btn-danger d-none">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </main>