@extends('layout.app')

@section('content')
    <div x-data="taskForm()" class="p-4 bg-white rounded shadow-md">
        <h2 class="text-lg font-semibold mb-4">Kirim Tugas ke User</h2>

        <form @submit.prevent="submitTask">
            <div class="mb-4">
                <label class="block font-medium">Judul Tugas:</label>
                <input type="text" x-model="title" class="w-full border p-2 rounded" required>
            </div>

            <div class="mb-4">
                <label class="block font-medium">Deskripsi Tugas:</label>
                <textarea x-model="description" class="w-full border p-2 rounded"></textarea>
            </div>

            <div class="mb-4">
                <label class="block font-medium">Pilih User:</label>
                <select x-model="userId" class="w-full border p-2 rounded" required>
                    <option value="" disabled>Pilih User:</option>
                    <template x-for="user in users" :key="user.id">
                        <option :value="user.id" x-text="user.name"></option>
                    </template>
                </select>
            </div>

            <div class="mb-4">
                <label class="block font-medium">File Tugas</label>
                <input type="file" @change="file = $event.target.file[0]" class="w-full border p-2 rounded" required>
            </div>

            <button type="submit" class="bg-blue-500 text-white p-2 rounded">Kirim Tugas</button>
        </form>
    </div>

    <script>
        function taskForm()
        {
            return {
                users: [],
                userId: '',
                title: '',
                description: '',
                file: null,

                init() {
                    this.fetchUser();
                },

                fetchUsers() {
                    fetch('/api/users')
                    .then(res => res.json())
                    .then(data => this.users = data)
                    .catch(err => console.error('Gagal memuat user: ', err));
                },

                submitTask() {
                    const formData = new FormData();
                    formData.append('user_id', this.userId);
                    formData.append('title', this.title);
                    formData.append('description', this.description);
                    formData.append('file', this.file);

                    fetch('/tasks', {
                        method: 'POST',
                        headers: { 'X-CRSF-TOKEN': document.querySelector('meta[name="crsf-token"]').content },
                        body: formData
                    })
                    .then(res => res.json())
                    .then(data => {
                        alert(data.message);
                    })
                    .catch(err => console.error('Error: ', err));
                }
            }
        }
    </script>
@endsection