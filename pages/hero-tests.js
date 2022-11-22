import Link from "next/link";
import Title2 from "./components/title2";

export default function HeroTests() {
    return (
        <div>
            <canvas id="c"></canvas>
            <Title2 sub_title='Welcome' title='Home' description= 'Building An Electric Vehicle Charging Network, Shared By Billions.'/>
        </div>
    );
}