<nav class="bg-white shadow-sm mb-6">
    <div class="flex w-full px-6 py-3 justify-between items-center">
        <div class="flex items-center gap-8">
            <div class="flex gap-5 text-sm font-medium">
                {{-- menu products --}}
                <a href="{{ route('products.index') }}"
                class="{{ request()->routeIs('products.index')?
                'text-blue-500 border-b-2 border-blue-500 pb-1':
                'text-grey-500 hover:text-blue-500'}}
                flex items-center gap-1">
                    <span class="material-icons text-base">inventory_2</span>
                    Item
                </a>

                {{-- menu transaksi --}}
                <a href="#" class="text-grey-500 hover:text-blue-500 flex items-center gap-1 transition">
                    <span class="material-icons text-base">receipt_long</span>
                    Transaksi
                </a>
            </div>
        </div>
        {{-- Logout --}}
            <form id="logout" action="{{ route('logout') }}" method="post" class="m-0">
                @csrf
                <button type="button" onclick="confirmLogout()"
                class="text-grey-500 hover:text-red-500
                font-medium flex items-center gap-1 transition">
                <span class="material-icons text-base">logout</span>    
                Keluar
                </button>
            </form>
    </div>
</nav>

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function confirmLogout(){
        Swal.fire({
            title: 'Konfirmasi Logout',
            text: 'Yakin ingin keluar dari aplikasi Foodiest?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, keluar',
            cancelButtonText: 'Batal'
        })
        .then((result) => {
            if (result.isConfirmed){
                document.getElementById('logout').submit();
            }
        });
    }
</script>