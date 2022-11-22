import Link from "next/link";
import Title from "./components/title";
import { Disclosure } from '@headlessui/react'
import { ChevronDownIcon } from '@heroicons/react/24/outline'

const faqs = [
    {
        question: "Question 1",
        answer:
            "Answer. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.",
    },
    {
        question: "Question 2",
        answer:
            "Answer. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.",
    },
    {
        question: "Question 3",
        answer:
            "Answer. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.",
    },
    {
        question: "Question 4",
        answer:
            "Answer. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.",
    },
    {
        question: "Question 5",
        answer:
            "Answer. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.",
    },
    {
        question: "Question 6",
        answer:
            "Answer. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.",
    },
    {
        question: "Question 1",
        answer:
            "Answer. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.",
    },

]


export default function Home() {
    return (
        <div>
            <Title sub_title='Information' title='FAQs' description= 'Everything you need to know'/>
            <div className="bg-[#2b3233]">
                <div className="mx-auto max-w-7xl pb-12 px-4 sm:pb-16 sm:px-6 lg:px-8">
                    <div className="mx-auto max-w-3xl divide-y-2 divide-gray-200">
                        <dl className="mt-0 space-y-6 divide-y divide-gray-200">
                            {faqs.map((faq) => (
                                <Disclosure as="div" key={faq.question} className="pt-6">
                                    {({ open }) => (
                                        <>
                                            <dt className="text-lg">
                                                <Disclosure.Button className="flex w-full items-start justify-between text-left text-white">
                                                    <span className="font-medium text-white">{faq.question}</span>
                                                    <span className="ml-6 flex h-7 items-center">
                          <ChevronDownIcon
                              className={(open ? '-rotate-180' : 'rotate-0', 'h-6 w-6 transform')}
                              aria-hidden="true"
                          />
                        </span>
                                                </Disclosure.Button>
                                            </dt>
                                            <Disclosure.Panel as="dd" className="mt-2 pr-12">
                                                <p className="text-base text-gray-50">{faq.answer}</p>
                                            </Disclosure.Panel>
                                        </>
                                    )}
                                </Disclosure>
                            ))}
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    );
}