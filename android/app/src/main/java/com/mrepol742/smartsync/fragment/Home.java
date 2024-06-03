package com.mrepol742.smartsync.fragment;

import static android.graphics.BitmapFactory.decodeFile;

import android.content.Context;
import android.os.Bundle;

import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.fragment.app.Fragment;

import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ArrayAdapter;
import android.widget.GridView;
import android.widget.ImageView;
import android.widget.Spinner;
import android.widget.TextView;

import com.mrepol742.smartsync.R;
import com.mrepol742.smartsync.data.Area;

import java.util.ArrayList;

public class Home extends Fragment {
    private static final String ARG_PARAM1 = "param1";
    private static final String ARG_PARAM2 = "param2";

    private String mParam1;
    private String mParam2;

    public Home() {
    }

    public static Home newInstance(String param1, String param2) {
        Home fragment = new Home();
        Bundle args = new Bundle();
        args.putString(ARG_PARAM1, param1);
        args.putString(ARG_PARAM2, param2);
        fragment.setArguments(args);
        return fragment;
    }

    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        if (getArguments() != null) {
            mParam1 = getArguments().getString(ARG_PARAM1);
            mParam2 = getArguments().getString(ARG_PARAM2);
        }
    }

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {
        View view = inflater.inflate(R.layout.fragment_home, container, false);

        Spinner chooseAction = view.findViewById(R.id.chooseAction);
        ArrayList<String> arrayList = Area.getAreas();
        arrayList.add(0, "All Room");
        arrayList.add(arrayList.size(), "Add option");
        ArrayAdapter<String> adapter = new ArrayAdapter<>(requireActivity(), android.R.layout.simple_spinner_dropdown_item, arrayList);
        chooseAction.setAdapter(adapter);

        ArrayList<UI> list = new ArrayList<UI>();
        for (String string: Area.getAreas()) {
            list.add(new UI(R.mipmap.ic_launcher_round, string));
        }

        GridView allRooms = view.findViewById(R.id.allRooms);
        Adapter adapter1 = new Adapter(requireActivity(), list);
        allRooms.setAdapter(adapter1);
        return view;
    }

    public class Adapter extends ArrayAdapter<UI> {

        public Adapter(@NonNull Context context, ArrayList<UI> livingSpace) {
            super(context, 0, livingSpace);
        }

        @NonNull
        @Override
        public View getView(int position, @Nullable View convertView, @NonNull ViewGroup parent) {
            View view = convertView;
            if (view == null) {
                view = LayoutInflater.from(getContext()).inflate(R.layout.gridview_item, parent, false);
            }
            UI ui = (UI) getItem(position);
            ImageView img = view.findViewById(R.id.livingSpaceIcon);
            TextView tv = view.findViewById(R.id.livingSpaceName);

            img.setImageResource(ui.id);
            tv.setText(ui.name);
            return view;
        }
    }

    public class UI {
        public final int id;
        public final String name;


        public UI(int id, String name) {
            this.id = id;
            this.name = name;
        }
    }
}