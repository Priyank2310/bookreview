<x-guest-layout>
    <x-slot name="header">
        <!-- Header Section -->
        <div class="text-dark p-8 transition-transform transform" style="background: linear-gradient(45deg, #008080, #ffc107);">
            <!-- Header Content -->
            <div class="container mx-auto flex items-center justify-between">
                <!-- Logo -->
                <div>
                    <img src="./images/logo.jpg" alt="Logo" style="max-height: 100px; max-width: 200px; border-radius: 100%; height: 100px; width: 100px;">
                </div>

                <!-- Authentication Links -->
                <div class="flex items-center">
                    @auth
                        <!-- Admin Link -->
                        <div class="header-link-box">
                            <a href="{{ url('/admin') }}" class="header-link font-semibold hover:text-gray-300 focus:text-gray-300 focus:outline-none">
                                <button class="bg-white text-black font-semibold hover:text-white py-2 px-4 border border-white hover:border-transparent rounded">
                                    Admin
                                </button>
                            </a>
                        </div>
                    @else
                        <!-- Login Link -->
                        <div class="header-link-box">
                            <a href="{{ route('login') }}" class="header-link font-semibold hover:text-gray-300 focus:text-gray-300 focus:outline-none">
                                <button class="bg-white text-black font-semibold hover:text-white py-2 px-4 border border-white hover:border-transparent rounded">
                                    Login
                                </button>
                            </a>
                        </div>

                        @if (Route::has('register'))
                            <!-- Register Link -->
                            <div class="header-link-box ml-4">
                                <a href="{{ route('register') }}" class="header-link font-semibold hover:text-gray-300 focus:text-gray-300 focus:outline-none">
                                    <button class="bg-white text-black font-semibold hover:text-white py-2 px-4 border border-white hover:border-transparent rounded">
                                        Register
                                    </button>
                                </a>
                            </div>
                        @endif
                    @endauth
                </div>
            </div>
        </div>
    </x-slot>

    <!-- Welcome Section -->
    <div style="background-color: #ffffff; padding: 20px; text-align: center;">
        <div style="max-width: 600px; margin: 0 auto;">
            <h1 style="font-weight: 800; color: #000000; font-size: 2.5rem;">Welcome to our Book Review Platform!</h1>
            <p style="color: #000000; font-size: 1.2rem; white-space: nowrap;">Explore insightful reviews of the latest books.</p>
        </div>
    </div><br>

    <!-- Book Review Section -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-16 ">

        <div class="bg-blue-100 p-6 rounded-lg shadow-md transition-transform transform hover:scale-105">
            <img src="/images/book1.webp" alt="Book Cover" class="mb-4 rounded-lg w-full h-64 object-contain">
            <h2 class="text-2xl font-bold mb-2 text-blue-500">Hide and Seek</h2>
            <p class="text-gray-700 mb-4">A captivating review of Book 1 with insightful analysis.</p>
            <a href="#" class="inline-block px-4 py-2 bg-red-500 text-white rounded hover:bg-red-700">Read Review</a>
        </div>


        <div class="bg-green-100 p-6 rounded-lg shadow-md transition-transform transform hover:scale-105">
            <img src="/images/book2.jpg" alt="Book Cover" class="mb-4 rounded-lg w-full h-64 object-contain">
            <h2 class="text-2xl font-bold mb-2 text-green-500">The Adventure Playbook</h2>
            <p class="text-gray-700 mb-4">Explore the review of Book 2 and discover its literary merits.</p>
            <a href="#" class="inline-block px-4 py-2 bg-red-500 text-white rounded hover:bg-red-700">Read Review</a>
        </div>

        <div class="bg-yellow-100 p-6 rounded-lg shadow-md transition-transform transform hover:scale-105">
            <img src="/images/book3.jpg" alt="Book Cover" class="mb-4 rounded-lg w-full h-64 object-contain">
            <h2 class="text-2xl font-bold mb-2 text-yellow-500">A Journey to the Moon</h2>
            <p class="text-gray-700 mb-4">Dive into the world of Book 3 with this comprehensive book review.</p>
            <a href="#" class="inline-block px-4 py-2 bg-red-500 text-white rounded hover:bg-red-700">Read Review</a>
        </div>

        <div class="bg-blue-100 p-6 rounded-lg shadow-md transition-transform transform hover:scale-105">
            <img src="/images/book4.webp" alt="Book Cover" class="mb-4 rounded-lg w-full h-64 object-contain">
            <h2 class="text-2xl font-bold mb-2 text-blue-500">Last Hope</h2>
            <p class="text-gray-700 mb-4">Discover the wonders hidden within the pages of Book 4.</p>
            <a href="#" class="inline-block px-4 py-2 bg-red-500 text-white rounded hover:bg-red-700">Read Review</a>
        </div>

        <div class="bg-green-100 p-6 rounded-lg shadow-md transition-transform transform hover:scale-105">
            <img src="/images/book5.jpg" alt="Book Cover" class="mb-4 rounded-lg w-full h-64 object-contain">
            <h2 class="text-2xl font-bold mb-2 text-green-500">Heart Spring Mountain</h2>
            <p class="text-gray-700 mb-4">Uncover the emotional depth and captivating narrative of Book 5 through this detailed review.</p>
            <a href="#" class="inline-block px-4 py-2 bg-red-500 text-white rounded hover:bg-red-700">Read Review</a>
        </div>

        <div class="bg-yellow-100 p-6 rounded-lg shadow-md transition-transform transform hover:scale-105">
            <img src="/images/book6.webp" alt="Book Cover" class="mb-4 rounded-lg w-full h-64 object-contain">
            <h2 class="text-2xl font-bold mb-2 text-yellow-500">The Four Heavens</h2>
            <p class="text-gray-700 mb-4">Uncover the secrets and wisdom woven into the story of Book 6 in this insightful review.</p>
            <a href="#" class="text-yellow-500 hover:underline">Read Review</a>
        </div>

        @if($posts)
        @foreach ($posts as $post)
            <div class="bg-yellow-100 p-4 rounded-lg shadow-md transition-transform transform hover:scale-105 ">
                <img src="./images/default.jpeg" alt="{{ $post->title }}" class="mb-4 rounded-lg w-full h-60 object-contain">
                <h2 class="text-2xl font-bold mb-2">{{ $post->title }}</h2>
                <p class="text-gray-700 mb-4">{{ $post->content }}</p>
                <a href="{{ route('post-show', $post->id)}}" class="inline-block px-4 py-2 bg-red-500 text-white rounded hover:bg-red-700">Read Review</a>

            </div>
        @endforeach
    @else
        <div class="p-4">No content yet, please visit after some days.</div>
    @endif

    </div><br>

    <!-- Footer Section -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <footer style="color: white; padding: 8px; background-color: #34495e;">
        <!-- Footer Content -->
        <div style="width: 90%; display: flex; justify-content: space-around; margin: 0 auto;">

            <div style="width: 30%; text-align: center; padding: 1rem;">
                <h6 style="margin-bottom: 10px; font-size: 1.6rem; font-weight: bold;">DISCOVERY</h6>
                <ul style="list-style-type: none; padding-left: 0; line-height: 20px;">
                    <li style="line-height: 25px;">Become a Reviewer</li>
                    <li style="line-height: 25px;">Reviewer Leaderboard</li>
                </ul>
            </div>


            <div style="width: 20%; padding: 1rem; text-align: center;">
                <h6 style="margin-bottom: 10px; font-size: 1.6rem; font-weight: bold;">LEARN</h6>
                <ul style="list-style-type: none; padding-left: 0; ">
                    <li style="line-height: 25px;">Learning</li>
                    <li style="line-height: 25px;" >Community Forums</li>
                </ul>
            </div>


            <div style="width: 30%; padding: 1rem; text-align: center;">
                <h6 style="margin-bottom: 10px; font-size: 1.6rem; font-weight: bold;">RESOURCES</h6>
                <ul style="list-style-type: none; padding-left: 0;">
                    <li style="line-height: 25px;">Book Reviews Blogs</li>
                    <li style="line-height: 25px;">Short Story Ideas</li>
                </ul>
            </div>
        </div><br><br>

        <!-- Social Media Section -->
        <div style="width: 100%; text-align: center;">
            <h2 style="font-size: 1.5rem; border-bottom: 1px solid white; padding-bottom: 0.5rem;">Follow Us</h2>
            <br>
            <ul style="list-style: none; padding: 0; margin: 0; display: flex; justify-content: center ;align-items: center; ">
                <li style="margin-right: 1rem; ">
                    <a  href="" style="background:#4267b2; width: 10px;  height: 10px; font-size: 16px; border-radius: 100px ; padding: 8px;"  >
                        <i class='bx bxl-facebook'></i>
                    </a>
                </li>
                <li style="margin-right: 1rem;">
                    <a href="" style="background: #1da1f2 ;width: 10px;  height: 10px; font-size: 16px; border-radius: 100px ; padding: 8px; "  class="link" >
                        <i class='bx bxl-twitter'></i>
                    </a>
                </li>


                <li style="margin-right: 1rem;">
                    <a href="" style="background: #e1306c;width: 10px;  height: 10px; font-size: 16px; border-radius: 100px ; padding: 8px; ; "  class="link" >
                        <i class='bx bxl-instagram' ></i>
                    </a>
                </li>
                <li style="margin-right: 1rem;">
                    <a href="" style="background:#ff0000;width: 10px;  height: 10px; font-size: 16px; border-radius: 100px ; padding: 8px; "  class="link" >
                        <i class='bx bxl-gmail' ></i>
                    </a>
                </li>

            </ul>
        </div>

        <!-- Legal Information -->
        <p style="text-align: center; margin-top: 20px;">
            Terms of Service | Privacy | Content Policy
        </p>
        <p style="color: white; font-size: 0.875rem; font-weight: bold; margin-top: 0.5rem;">&copy; Made By- Priyank Maheshwari</p>
    </footer>

    <!-- Script Section -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const headerLinks = document.querySelectorAll('.header-link');

            headerLinks.forEach(link => {
                link.addEventListener('click', function() {
                    headerLinks.forEach(otherLink => otherLink.classList.remove('active'));
                    this.classList.add('active');
                    document.querySelector('.bg-blue-500').classList.add('clicked');
                });
            });
        });
    </script>
</x-guest-layout>
