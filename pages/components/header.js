import Link from "next/link";

export default function Header() {
    return (
        <header className="bg-[#2b3233]">
            <nav className="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8" aria-label="Top">
                <div className="flex w-full items-center justify-between border-b border-indigo-500 py-2 lg:border-none">
                    <div className="flex items-center">
                        <Link href='/'  className="mx-auto lg:mx-0">
                            <span className="sr-only">Your Company</span>
                            <img className="h-16 w-auto" src="/logo.png" alt="" />
                        </Link>
                        <div className="ml-24 hidden space-x-8 lg:block">
                            <Link href='/' className="text-base font-medium text-white hover:text-indigo-50">Home</Link>
                            <Link href='/faqs' className="text-base font-medium text-white hover:text-indigo-50">FAQs</Link>
                            <Link href='/hero-tests' className="text-base font-medium text-white hover:text-indigo-50">Hero Tests</Link>
                        </div>
                    </div>
                    <div className="ml-10 hidden space-x-4 lg:block">
                        <a
                            href="#"
                            className="inline-block rounded-md border border-transparent bg-[#00aeef] py-2 px-4 text-base font-medium text-white hover:bg-opacity-75"
                        >
                            Sign in
                        </a>
                        <a
                            href="#"
                            className="inline-block rounded-md border border-transparent bg-white py-2 px-4 text-base font-medium text-[#00aeef] hover:bg-[#32393a]-50"
                        >
                            Sign up
                        </a>
                    </div>
                </div>
                <div className="flex flex-wrap justify-center space-x-6 py-4 hidden">
                    <Link href='/' className="text-base font-medium text-white hover:text-indigo-50">Home</Link>
                    <Link href='/faqs' className="text-base font-medium text-white hover:text-indigo-50">FAQs</Link>
                </div>
            </nav>
        </header>
    );
}