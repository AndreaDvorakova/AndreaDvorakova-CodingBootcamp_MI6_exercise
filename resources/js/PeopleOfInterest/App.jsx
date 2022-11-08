import { useEffect, useState } from "react";
import PeopleList from "./PeopleList";
import StatusFilter from "./StatusFilter";

const App = () => {
    const [selected_status, setSelectedStatus] = useState("");

    return (
        <div id="returned-app-component">
            <StatusFilter
                selected_status={selected_status}
                setSelectedStatus={setSelectedStatus}
            />

            <PeopleList
                selected_status={selected_status}
                setSelectedStatus={setSelectedStatus}
            />
        </div>
    );
};

export default App;
