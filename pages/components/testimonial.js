export default function Testimonial() {
    return (
        <section className="overflow-hidden bg-gray-100 py-12 md:py-12">
            <div className="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

                <div className="relative">
                    <img  className="mx-auto h-16" src='https://secureservercdn.net/198.71.190.156/46m.f9c.myftpupload.com/wp-content/uploads/2022/06/LogoBlue_Circle.png'/>
                    <blockquote className="mt-10">
                        <div className="mx-auto max-w-3xl text-center text-2xl font-medium leading-9 text-gray-900">
                            <p>
                                &ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo expedita voluptas culpa sapiente
                                alias molestiae. Numquam corrupti in laborum sed rerum et corporis.&rdquo;
                            </p>
                        </div>
                        <footer className="mt-8">
                            <div className="md:flex md:items-center md:justify-center">
                                <div className="md:flex-shrink-0">
                                    <img
                                        className="mx-auto h-10 w-10 rounded-full"
                                        src="https://secureservercdn.net/198.71.190.156/46m.f9c.myftpupload.com/wp-content/uploads/2022/06/LogoBlue_Circle.png"
                                        alt=""
                                    />
                                </div>
                                <div className="mt-3 text-center md:mt-0 md:ml-4 md:flex md:items-center">
                                    <div className="text-base font-medium text-gray-900">Example</div>

                                    <svg className="mx-1 hidden h-5 w-5 text-indigo-600 md:block" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M11 0h3L9 20H6l5-20z" />
                                    </svg>

                                    <div className="text-base font-medium text-gray-500">CEO, ....</div>
                                </div>
                            </div>
                        </footer>
                    </blockquote>
                </div>
            </div>
        </section>
    )
}