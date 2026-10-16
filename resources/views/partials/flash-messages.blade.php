@if(session('success'))
<div style="background-color: #d1fae5; border-left: 5px solid #10b981; color: #065f46; padding: 16px 24px; margin: 20px auto; max-width: 1200px; border-radius: 8px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1); font-family: var(--font-body);">
    <div style="display: flex; align-items: center; justify-content: space-between;">
        <div style="display: flex; align-items: center; gap: 12px;">
            <svg style="width: 24px; height: 24px; color: #10b981; flex-shrink: 0;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span style="font-size: 16px; font-weight: 600;">{{ session('success') }}</span>
        </div>
        <button type="button" onclick="this.parentElement.parentElement.remove()" style="background: none; border: none; font-size: 20px; cursor: pointer; color: #065f46;">&times;</button>
    </div>
</div>
@endif

@if($errors->any())
<div style="background-color: #fee2e2; border-left: 5px solid #ef4444; color: #991b1b; padding: 16px 24px; margin: 20px auto; max-width: 1200px; border-radius: 8px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1); font-family: var(--font-body);">
    <div style="display: flex; align-items: flex-start; gap: 12px;">
        <svg style="width: 24px; height: 24px; color: #ef4444; flex-shrink: 0; margin-top: 2px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>
        <div>
            <span style="font-size: 16px; font-weight: 700; display: block; margin-bottom: 4px;">Please correct the errors below:</span>
            <ul style="margin: 0; padding-left: 20px; font-size: 14px;">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endif
