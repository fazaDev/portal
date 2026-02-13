<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generator Struktur Organisasi (Stable Print)</title>
    <style>
        :root {
            --primary-color: #0056b3;
            --secondary-color: #004494;
            --accent-color: #f0ad4e;
            --bg-color: #f4f6f9;
            --text-color: #333;
            --card-bg: #ffffff;
            --line-color: #555;
            /* Lebih gelap agar terlihat saat print */
            --border-radius: 8px;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-color);
            display: flex;
            flex-direction: column;
            height: 100vh;
            overflow: hidden;
        }

        /* --- Header --- */
        header {
            background: var(--primary-color);
            color: white;
            padding: 0.8rem 2rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            z-index: 10;
        }

        .header-title h1 {
            font-size: 1.1rem;
            font-weight: 600;
        }

        .header-title p {
            font-size: 0.8rem;
            opacity: 0.9;
        }

        .header-actions button {
            background: var(--accent-color);
            color: #000;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 600;
            font-size: 0.9rem;
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }

        /* --- Main Layout --- */
        main {
            display: flex;
            flex: 1;
            overflow: hidden;
        }

        /* --- Sidebar --- */
        aside {
            width: 340px;
            background: #fff;
            border-right: 1px solid #ddd;
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            gap: 1rem;
            overflow-y: auto;
            z-index: 5;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.05);
        }

        .panel-section {
            border-bottom: 1px solid #eee;
            padding-bottom: 1rem;
        }

        .panel-section:last-child {
            border-bottom: none;
        }

        h3 {
            font-size: 0.9rem;
            color: var(--primary-color);
            margin-bottom: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .form-group {
            margin-bottom: 0.8rem;
        }

        .form-group label {
            display: block;
            font-size: 0.8rem;
            margin-bottom: 0.3rem;
            font-weight: 600;
            color: #555;
        }

        .form-group input[type="text"],
        .form-group input[type="color"] {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 0.9rem;
        }

        .form-group input[type="file"] {
            font-size: 0.8rem;
        }

        .photo-preview {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background-color: #eee;
            margin: 0 auto 10px auto;
            display: block;
            object-fit: cover;
            border: 2px solid #ddd;
        }

        .btn {
            padding: 0.5rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 0.85rem;
            font-weight: 600;
            width: 100%;
            margin-bottom: 5px;
        }

        .btn-primary {
            background: var(--primary-color);
            color: white;
        }

        .btn-secondary {
            background: #e2e6ea;
            color: #333;
        }

        .btn-danger {
            background: #dc3545;
            color: white;
        }

        .btn-outline {
            background: transparent;
            border: 1px solid #ccc;
            color: #555;
        }

        /* --- Canvas Area --- */
        #org-canvas-container {
            flex: 1;
            position: relative;
            overflow: hidden;
            background-color: var(--bg-color);
            background-image: linear-gradient(#e5e5e5 1px, transparent 1px), linear-gradient(90deg, #e5e5e5 1px, transparent 1px);
            background-size: 20px 20px;
            cursor: grab;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #org-canvas-container:active {
            cursor: grabbing;
        }

        #tree-wrapper {
            position: relative;
            /* Ukuran area kerja virtual */
            width: 2000px;
            height: 2000px;
            transform-origin: center center;
            /* Kita hapus transition di sini agar saat print tidak ada animasi aneh */
        }

        /* --- Nodes --- */
        .free-node {
            position: absolute;
            background: white;
            border: 1px solid #ccc;
            padding: 10px;
            width: 170px;
            display: flex;
            flex-direction: column;
            align-items: center;
            border-radius: var(--border-radius);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            cursor: grab;
            user-select: none;
            z-index: 10;
        }

        .free-node:active {
            cursor: grabbing;
        }

        .free-node.selected {
            border: 2px solid var(--primary-color);
            box-shadow: 0 0 0 4px rgba(0, 86, 179, 0.2);
            z-index: 20;
        }

        .node-photo {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #eee;
            background: #f9f9f9;
            margin-bottom: 8px;
        }

        .node-role {
            font-weight: bold;
            font-size: 0.85rem;
            color: var(--primary-color);
            text-align: center;
            margin-bottom: 2px;
            line-height: 1.2;
        }

        .node-name {
            font-size: 0.8rem;
            color: #555;
            text-align: center;
            margin-bottom: 4px;
        }

        .node-eselon {
            font-size: 0.7rem;
            background: #eee;
            padding: 2px 6px;
            border-radius: 10px;
            color: #666;
        }

        /* SVG Connector Layer */
        #connector-layer {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
            overflow: visible;
        }

        .connector-path {
            fill: none;
            stroke: var(--line-color);
            stroke-width: 2;
        }

        .hide-lines #connector-layer {
            display: none;
        }

        .hide-lines .free-node {
            border: 1px solid #aaa;
        }

        /* Controls */
        .zoom-controls {
            position: absolute;
            bottom: 20px;
            right: 20px;
            display: flex;
            flex-direction: column;
            gap: 5px;
            z-index: 100;
        }

        .zoom-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 1px solid #ccc;
            background: white;
            cursor: pointer;
            font-size: 1.2rem;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        /* Toast */
        #toast {
            visibility: hidden;
            min-width: 250px;
            background-color: #333;
            color: #fff;
            text-align: center;
            border-radius: 4px;
            padding: 12px;
            position: fixed;
            z-index: 200;
            left: 50%;
            bottom: 30px;
            transform: translateX(-50%);
            font-size: 0.9rem;
            opacity: 0;
            transition: opacity 0.3s;
        }

        #toast.show {
            visibility: visible;
            opacity: 1;
            bottom: 50px;
        }

        @media (max-width: 768px) {
            main {
                flex-direction: column;
            }

            aside {
                width: 100%;
                height: 35%;
                border-right: none;
                border-bottom: 1px solid #ddd;
            }

            #org-canvas-container {
                height: 65%;
            }
        }

        /* =========================================
           PERBAIKAN CSS PRINT (Bagian Terpenting)
           ========================================= */
        @media print {
            @page {
                size: landscape;
                /* Paksa kertas Landscape */
                margin: 0;
                /* Hilangkan margin printer */
            }

            body {
                background: white;
                height: auto;
                overflow: visible;
                display: block;
                /* Matikan Flex layout body */
            }

            /* Sembunyikan UI yang tidak perlu */
            header,
            aside,
            .zoom-controls,
            #toast {
                display: none !important;
            }

            main {
                display: block;
                height: auto;
                overflow: visible;
            }

            /* Container Canvas */
            #org-canvas-container {
                overflow: visible;
                background: white !important;
                /* Background polos putih saat print */
                background-image: none !important;
                /* Hilangkan grid */
                display: block;
                position: static;
                /* Matikan relative positioning container */
                width: 100%;
                height: 100%;
            }

            /* Wrapper Tree: Ini kuncinya. Kita buat statis tapi ukurannya tetap besar */
            #tree-wrapper {
                position: absolute;
                top: 0;
                left: 0;
                /* Pastikan transformasi zoom/drag di-reset saat print agar posisi akurat */
                transform: none !important;
                /* Tidak perlu width/height fixed di print, biarkan konten mengalir */
                width: 2000px;
                height: 2000px;
            }

            /* Node: PERTAHANKAN POSISI ABSOLUTE */
            .free-node {
                position: absolute;
                /* Jangan diubah jadi relative/inline */
                left: auto;
                /* Reset hack CSS sebelumnya */
                top: auto;
                /* Tetap pakai koordinat x dan y dari data */
                border: 1px solid #000;
                /* Border hitam tajam untuk print */
                box-shadow: none;
                /* Hilangkan shadow agar hemat tinta */
                page-break-inside: avoid;
                /* Cegah kartu terpotong halaman */
                break-inside: avoid;
            }

            /* Garis Konektor: Pertahankan posisi SVG */
            #connector-layer {
                display: block;
                /* Pastikan garis muncul */
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }

            .connector-path {
                stroke: #000;
                /* Garis hitam saat print */
                stroke-width: 1.5;
            }
        }
    </style>
</head>

<body>

    <header>
        <div class="header-title">
            <h1>Struktur Organisasi (Print Stabil)</h1>
            <p>Dinas Pekerjaan Umum dan Tata Ruang Provinsi Jambi</p>
        </div>
        <div class="header-actions">
            <button onclick="downloadImage()">Unduh Gambar</button>
        </div>
    </header>

    <main>
        <aside>
            <div class="panel-section">
                <h3>Editor Jabatan</h3>
                <div id="no-selection-msg" style="color: #777; font-style: italic; font-size: 0.9rem;">
                    Klik kartu untuk Edit atau Drag untuk geser.
                </div>

                <div id="editor-form" style="display: none;">
                    <img id="preview-img" class="photo-preview" src="" alt="Preview">

                    <div class="form-group">
                        <label>Foto Profil</label>
                        <input type="file" id="input-photo" accept="image/*">
                    </div>

                    <div class="form-group">
                        <label>Nama Jabatan</label>
                        <input type="text" id="input-role">
                    </div>
                    <div class="form-group">
                        <label>Nama Pejabat</label>
                        <input type="text" id="input-name">
                    </div>
                    <div class="form-group">
                        <label>Eselon</label>
                        <input type="text" id="input-eselon">
                    </div>
                    <button class="btn btn-primary" onclick="updateNode()">Simpan</button>
                </div>
            </div>

            <div class="panel-section" id="structure-actions" style="display:none;">
                <h3>Aksi Struktur</h3>
                <button class="btn btn-secondary" onclick="addChildNode()">+ Tambah Anak</button>
                <button class="btn btn-secondary" onclick="addSiblingNode()">+ Tambah Sekawan</button>
                <button class="btn btn-danger" onclick="deleteNode()">Hapus Jabatan</button>
                <div style="margin-top:10px;">
                    <button class="btn btn-outline" onclick="toggleLines()">Toggle Garis Konektor</button>
                </div>
            </div>

            <div class="panel-section">
                <h3>Pengaturan Canvas</h3>
                <div class="form-group">
                    <label>Warna Background</label>
                    <input type="color" id="bg-color-picker" value="#f4f6f9" oninput="updateBackground()">
                </div>
                <div class="form-group">
                    <label>Warna Grid</label>
                    <input type="color" id="grid-color-picker" value="#e5e5e5" oninput="updateBackground()">
                </div>
                <button class="btn btn-outline" onclick="resetPositions()">Reset Posisi</button>
            </div>

            <div class="panel-section" id="default-actions">
                <button class="btn btn-outline" onclick="resetToDefault()" style="width:100%">Reset Full Data</button>
            </div>
        </aside>

        <div id="org-canvas-container">
            <div id="tree-wrapper">
                <svg id="connector-layer"></svg>
                <div id="nodes-layer"></div>
            </div>

            <div class="zoom-controls">
                <button class="zoom-btn" onclick="adjustZoom(0.1)">+</button>
                <button class="zoom-btn" onclick="adjustZoom(-0.1)">-</button>
                <button class="zoom-btn" onclick="resetZoom()">⟲</button>
            </div>
        </div>
    </main>

    <div id="toast">Notifikasi</div>

    <script>
        // --- 1. Data ---
        const defaultData = [
            { id: 1, role: "Kepala Dinas", name: "Kosong", eselon: "Eselon II.b", photo: "", x: 900, y: 50, children: [2, 3, 4, 5] },
            { id: 2, role: "Sekretaris Dinas", name: "Kosong", eselon: "Eselon III.a", photo: "", x: 300, y: 250, parentId: 1, children: [21, 22, 23] },
            { id: 21, role: "Sub Bag. Umum", name: "", eselon: "Eselon IV.a", photo: "", x: 150, y: 450, parentId: 2, children: [] },
            { id: 22, role: "Sub Bag. Kepegawaian", name: "", eselon: "Eselon IV.a", photo: "", x: 300, y: 450, parentId: 2, children: [] },
            { id: 23, role: "Sub Bag. Keuangan", name: "", eselon: "Eselon IV.a", photo: "", x: 450, y: 450, parentId: 2, children: [] },

            { id: 3, role: "Bidang Bina Marga", name: "Kosong", eselon: "Eselon III.a", photo: "", x: 700, y: 250, parentId: 1, children: [31, 32] },
            { id: 31, role: "Seksi Pembangunan", name: "", eselon: "Eselon IV.a", photo: "", x: 600, y: 450, parentId: 3, children: [] },
            { id: 32, role: "Seksi Pemeliharaan", name: "", eselon: "Eselon IV.a", photo: "", x: 800, y: 450, parentId: 3, children: [] },

            { id: 4, role: "Bidang Cipta Karya", name: "Kosong", eselon: "Eselon III.a", photo: "", x: 1100, y: 250, parentId: 1, children: [41] },
            { id: 41, role: "Seksi Bangunan", name: "", eselon: "Eselon IV.a", photo: "", x: 1100, y: 450, parentId: 4, children: [] },

            { id: 5, role: "Bidang Tata Ruang", name: "Kosong", eselon: "Eselon III.a", photo: "", x: 1400, y: 250, parentId: 1, children: [51] },
            { id: 51, role: "Seksi Tata Ruang", name: "", eselon: "Eselon IV.a", photo: "", x: 1400, y: 450, parentId: 5, children: [] }
        ];

        let nodes = JSON.parse(JSON.stringify(defaultData));
        let selectedNodeId = null;
        let nextId = 100;
        let showLines = true;

        let scale = 0.6;
        let pannedX = 0;
        let pannedY = 0;
        let isDraggingCanvas = false;
        let isDraggingNode = false;
        let dragTargetId = null;
        let startX, startY;

        const canvasContainer = document.getElementById('org-canvas-container');
        const treeWrapper = document.getElementById('tree-wrapper');
        const nodesLayer = document.getElementById('nodes-layer');
        const connectorLayer = document.getElementById('connector-layer');
        const editorForm = document.getElementById('editor-form');
        const noSelectionMsg = document.getElementById('no-selection-msg');
        const structureActions = document.getElementById('structure-actions');
        const defaultActions = document.getElementById('default-actions');

        const inputRole = document.getElementById('input-role');
        const inputName = document.getElementById('input-name');
        const inputEselon = document.getElementById('input-eselon');
        const inputPhoto = document.getElementById('input-photo');
        const previewImg = document.getElementById('preview-img');

        // --- 2. Rendering ---
        function render() {
            nodesLayer.innerHTML = '';
            connectorLayer.innerHTML = '';

            // Draw Nodes
            nodes.forEach(node => {
                const el = document.createElement('div');
                el.className = `free-node ${selectedNodeId === node.id ? 'selected' : ''}`;
                // Terapkan posisi absolut berdasarkan data X Y
                el.style.left = node.x + 'px';
                el.style.top = node.y + 'px';

                el.onmousedown = (e) => startDragNode(e, node.id);

                const img = document.createElement('img');
                img.className = 'node-photo';
                img.src = node.photo || `https://picsum.photos/seed/${node.id}/100/100`;

                const roleDiv = document.createElement('div');
                roleDiv.className = 'node-role';
                roleDiv.textContent = node.role;

                const nameDiv = document.createElement('div');
                nameDiv.className = 'node-name';
                nameDiv.textContent = node.name || "-";

                const eselonDiv = document.createElement('div');
                eselonDiv.className = 'node-eselon';
                eselonDiv.textContent = node.eselon || "-";

                el.appendChild(img);
                el.appendChild(roleDiv);
                el.appendChild(nameDiv);
                el.appendChild(eselonDiv);
                nodesLayer.appendChild(el);
            });

            if (showLines) {
                drawConnectors();
            }
        }

        function drawConnectors() {
            nodes.forEach(node => {
                if (node.parentId) {
                    const parent = nodes.find(n => n.id === node.parentId);
                    if (parent) {
                        const cardW = 170;
                        const cardH = 130;

                        const pCx = parent.x + (cardW / 2);
                        const pCy = parent.y + cardH;
                        const cCx = node.x + (cardW / 2);
                        const cCy = node.y;

                        // Logika Garis Orthogonal (Siku-siku)
                        const midY = (pCy + cCy) / 2;

                        if (pCx === cCx) {
                            const line = document.createElementNS("http://www.w3.org/2000/svg", "line");
                            line.setAttribute("x1", pCx);
                            line.setAttribute("y1", pCy);
                            line.setAttribute("x2", cCx);
                            line.setAttribute("y2", cCy);
                            line.setAttribute("class", "connector-path");
                            connectorLayer.appendChild(line);
                        } else {
                            const path = document.createElementNS("http://www.w3.org/2000/svg", "path");
                            const d = `M ${pCx} ${pCy} L ${pCx} ${midY} L ${cCx} ${midY} L ${cCx} ${cCy}`;

                            path.setAttribute("d", d);
                            path.setAttribute("class", "connector-path");
                            connectorLayer.appendChild(path);
                        }
                    }
                }
            });
        }

        // --- 3. Interaction ---
        canvasContainer.addEventListener('mousedown', (e) => {
            if (e.target === canvasContainer || e.target === treeWrapper) {
                isDraggingCanvas = true;
                startX = e.clientX - pannedX;
                startY = e.clientY - pannedY;
                canvasContainer.style.cursor = 'grabbing';
            }
        });

        function startDragNode(e, id) {
            e.stopPropagation();
            selectNode(id);
            isDraggingNode = true;
            dragTargetId = id;
            startX = e.clientX;
            startY = e.clientY;
        }

        window.addEventListener('mousemove', (e) => {
            if (isDraggingCanvas) {
                e.preventDefault();
                pannedX = e.clientX - startX;
                pannedY = e.clientY - startY;
                updateCanvasTransform();
            } else if (isDraggingNode && dragTargetId !== null) {
                e.preventDefault();
                const node = nodes.find(n => n.id === dragTargetId);
                if (node) {
                    const dx = (e.clientX - startX) / scale;
                    const dy = (e.clientY - startY) / scale;
                    node.x += dx;
                    node.y += dy;
                    startX = e.clientX;
                    startY = e.clientY;
                    render();
                }
            }
        });

        window.addEventListener('mouseup', () => {
            isDraggingCanvas = false;
            isDraggingNode = false;
            dragTargetId = null;
            canvasContainer.style.cursor = 'grab';
        });

        canvasContainer.addEventListener('wheel', (e) => {
            e.preventDefault();
            const delta = e.deltaY * -0.001;
            scale = Math.min(Math.max(0.1, scale + delta), 2);
            updateCanvasTransform();
        }, { passive: false });

        function updateCanvasTransform() {
            treeWrapper.style.transform = `translate(${pannedX}px, ${pannedY}px) scale(${scale})`;
        }

        function adjustZoom(amount) {
            scale = Math.min(Math.max(0.1, scale + amount), 2);
            updateCanvasTransform();
        }
        function resetZoom() {
            scale = 0.6; pannedX = 0; pannedY = 0;
            updateCanvasTransform();
        }

        // --- 4. Editing ---
        function selectNode(id) {
            selectedNodeId = id;
            const node = nodes.find(n => n.id === id);
            noSelectionMsg.style.display = 'none';
            editorForm.style.display = 'block';
            structureActions.style.display = 'block';
            defaultActions.style.display = 'none';

            inputRole.value = node.role;
            inputName.value = node.name;
            inputEselon.value = node.eselon;
            previewImg.src = node.photo || `https://picsum.photos/seed/${node.id}/100/100`;
            inputPhoto.value = '';
            render();
        }

        inputPhoto.addEventListener('change', function (e) {
            if (e.target.files && e.target.files[0]) {
                const reader = new FileReader();
                reader.onload = function (e) { previewImg.src = e.target.result; }
                reader.readAsDataURL(e.target.files[0]);
            }
        });

        function updateNode() {
            if (!selectedNodeId) return;
            const node = nodes.find(n => n.id === selectedNodeId);
            if (node) {
                node.role = inputRole.value;
                node.name = inputName.value;
                node.eselon = inputEselon.value;
                node.photo = previewImg.src;
                render();
                showToast("Data tersimpan.");
            }
        }

        // --- 5. Structure Ops ---
        function addChildNode() {
            if (!selectedNodeId) return;
            const parent = nodes.find(n => n.id === selectedNodeId);
            const newId = nextId++;
            const newNode = {
                id: newId, role: "Jabatan Baru", name: "", eselon: "-", photo: "",
                x: parent.x, y: parent.y + 200, parentId: parent.id, children: []
            };
            parent.children.push(newId);
            nodes.push(newNode);
            render();
        }

        function addSiblingNode() {
            if (!selectedNodeId) return;
            const current = nodes.find(n => n.id === selectedNodeId);
            if (current.parentId) {
                const parent = nodes.find(n => n.id === current.parentId);
                const newId = nextId++;
                const newNode = {
                    id: newId, role: "Jabatan Baru", name: "", eselon: "-", photo: "",
                    x: current.x + 200, y: current.y, parentId: parent.id, children: []
                };
                parent.children.push(newId);
                nodes.push(newNode);
                render();
            }
        }

        function deleteNode() {
            if (!selectedNodeId) return;
            if (selectedNodeId === 1) { showToast("Tidak bisa hapus Kepala Dinas."); return; }
            if (!confirm("Hapus cabang ini?")) return;
            const toDelete = nodes.find(n => n.id === selectedNodeId);
            const idsToDelete = new Set([selectedNodeId]);
            let queue = [...toDelete.children];
            while (queue.length > 0) {
                const currId = queue.shift();
                idsToDelete.add(currId);
                const currNode = nodes.find(n => n.id === currId);
                if (currNode) queue.push(...currNode.children);
            }
            const parent = nodes.find(n => n.id === toDelete.parentId);
            if (parent) parent.children = parent.children.filter(id => id !== selectedNodeId);
            nodes = nodes.filter(n => !idsToDelete.has(n.id));
            selectedNodeId = null;
            noSelectionMsg.style.display = 'block';
            editorForm.style.display = 'none';
            structureActions.style.display = 'none';
            defaultActions.style.display = 'block';
            render();
        }

        // --- 6. Utils ---
        function toggleLines() {
            showLines = !showLines;
            render();
            canvasContainer.classList.toggle('hide-lines', !showLines);
        }

        function updateBackground() {
            const bgColor = document.getElementById('bg-color-picker').value;
            const gridColor = document.getElementById('grid-color-picker').value;
            canvasContainer.style.backgroundColor = bgColor;
            canvasContainer.style.backgroundImage = `linear-gradient(${gridColor} 1px, transparent 1px), linear-gradient(90deg, ${gridColor} 1px, transparent 1px)`;
        }

        function resetPositions() {
            if (confirm("Reset posisi?")) {
                nodes = JSON.parse(JSON.stringify(defaultData));
                render();
                resetZoom();
            }
        }

        function resetToDefault() {
            if (confirm("Reset semua?")) {
                nodes = JSON.parse(JSON.stringify(defaultData));
                selectedNodeId = null;
                noSelectionMsg.style.display = 'block';
                editorForm.style.display = 'none';
                structureActions.style.display = 'none';
                defaultActions.style.display = 'block';
                render();
                resetZoom();
            }
        }

        function showToast(msg) {
            const t = document.getElementById("toast");
            t.className = "show"; t.textContent = msg;
            setTimeout(() => t.className = t.className.replace("show", ""), 3000);
        }

        function downloadImage() {
            window.print();
        }

        render();
        updateCanvasTransform();

    </script>
</body>

</html>