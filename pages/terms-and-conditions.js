import Link from "next/link";
import Title from "./components/title";

export default function Home() {
    return (
        <div>
            <Title sub_title='Legal' title='Terms & Conditions' description= 'Our Terms & Conditions'/>
            <div className="relative px-4 sm:px-6 lg:px-8 pb-12">
                <div className="mx-auto max-w-prose text-lg">
                    <p className="mt-8 text-xl leading-8 font-thin text-gray-500">
                        Aliquet nec orci mattis amet quisque ullamcorper neque, nibh sem. At arcu, sit dui mi, nibh dui, diam eget
                        aliquam. Quisque id at vitae feugiat egestas ac. Diam nulla orci at in viverra scelerisque eget. Eleifend
                        egestas fringilla sapien.
                    </p>

                    <p className="mt-8 text-xl leading-8 font-thin text-gray-500">
                        Here at eTukTuk, protecting your data and ensuring your privacy is of paramount importance to us. As we engage with each other, it is important to let you know that eTukTuk and its team will do everything in their power to ensure that your information is kept safe.

                        Please read this Privacy Policy carefully, as it contains important guidance about the types of information that we collect and why we collect it, as well as how we store, use, and share your data. This document will also cover your options and your rights regarding the information you share with us.

                        This Privacy Policy exists between you, the “Data Provider” hereafter known as “You,” “Your,” or the “User” of the website https://etuktuk.io and the owner of this website, hereafter known as “We,” “Us,” “Our,” or the “Data Controller”.
                    </p>
                </div>
            </div>
        </div>
    );
}