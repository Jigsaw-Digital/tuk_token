import Link from "next/link";
import Title from "./components/title";

export default function HeroTests() {
    return (
        <div>
            <canvas id="c"></canvas>
            <Title sub_title='Welcome' title='Home' description= 'Building An Electric Vehicle Charging Network, Shared By Billions.'/>
        </div>
    );
}