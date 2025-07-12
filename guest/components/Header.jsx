import { NavLink } from "react-router-dom";

export default function Header() {
  return (
    <div className="py-10 mb-20 shadow-xl bg-indigo-900 shadow-gray-950/100 sticky top-0">
      <nav className=" text-3xl md:text-5xl xl:text-6xl font-mono font-semibold text-center uppercase">
        <ul>
          <li>
            <NavLink to="/">MangaList</NavLink>
          </li>
        </ul>
      </nav>
    </div>
  );
}
