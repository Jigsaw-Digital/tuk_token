import Link from "next/link";

export default function Title({sub_title, title, description }) {
    return (
        <div className="bg-white">
            <div className="mx-auto max-w-7xl pt-12 pb-6 px-4 sm:px-6 lg:px-8">
                <div className="text-center">
                    <h2 className="text-lg font-semibold text-[#00aeef]">{sub_title}</h2>
                    <p className="mt-1 text-4xl font-bold tracking-tight text-[#32393a] sm:text-5xl lg:text-6xl">{title}</p>
                    <p className="mx-auto mt-5 max-w-xl text-xl text-gray-500">{description}</p>
                </div>
            </div>
        </div>
    );
}