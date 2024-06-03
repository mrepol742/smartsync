package com.mrepol742.smartsync.data;

import java.util.ArrayList;

public class Area {

    public Area() {
    }

    public static ArrayList<String> getAreas() {
        ArrayList<String> arrayList = new ArrayList<>();

        arrayList.add("Living Room");
        arrayList.add("Bed Room");
        arrayList.add("Kitchen Room");
        arrayList.add("Comfort Room");
        arrayList.add("Outside");
        arrayList.add("Garage");

        return arrayList;
    }
}
