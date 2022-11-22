import Link from "next/link";


export default function Hero({sub_title, title, description}) {
    return (
        <div>

            <div
                className="relative flex items-center justify-center h-[60vh] overflow-hidden"
            >
                <div
                    className="relative z-30 p-5 text-2xl text-white  rounded-xl"
                >
                    <div style={{
                        'margin-top': '-200px'
                    }}>
                        <div className="mx-auto max-w-7xl pt-12 pb-6 px-4 sm:px-6 lg:px-8">
                            <div className="text-center">
                                <h1 className="text-lg font-semibold text-gray-50">{sub_title}</h1>
                                <p className="mt-1 text-4xl font-bold tracking-tight text-white sm:text-5xl lg:text-6xl">{title}</p>
                                <p className="mx-auto mt-5 max-w-xl text-xl text-gray-100">{description}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <video
                    autoPlay
                    loop
                    muted
                    className="absolute z-10 w-auto min-w-full min-h-full max-w-none"
                >
                    <source
                        src="/bg-2.mp4"
                        type="video/mp4"
                    />
                    Your browser does not support the video tag.
                </video>
                <div className="absolute top-0 left-0 w-full h-full bg-[#2b3233] z-10 opacity-50"></div>
            </div>
        </div>
    );
}